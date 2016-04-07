<?php

$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$callback = isset($_GET['callback']) ? $_GET['callback'] : '';
$tree = getTree();
echo searchByKeyword($keyword, $callback, $tree);

/**
 * [searchByKeyword 通过关键字查找文档内容，调用shell命令，PHP过滤显示结果]
 * @param  [type] $word [关键字]
 * @return [type]       [json]
 */
function searchByKeyword($word = '', $callback = '', $tree = array()) {
	if (empty($word)) {
		return echoJson(array('code' => -1, 'message' => 'no keyword', 'content' => null), $callback);
	} else {
		exec(" find .  -type f -name '*.md' | xargs grep -m 5 '" . escapeshellarg($word) . "'", $output);

		$result = array();
		$fileBuket = array();
		$i = 0;
		foreach ($output as $key => $value) {
			//最多显示30条数据
			if ($i >= 30) {
				break;
			}

			if (stripos($value, '.md:') !== false) {
				$mas = explode('.md:', $value);
				$mas[0] = str_replace('./', '', $mas[0]);
				//过滤掉菜单文件
				if ($mas[0] == 'all' || $mas[0] == 'SUMMARY') {
					continue;
				}
				$url = $mas[0] . '.md';
				//同一个文件最多显示1条数据
				if ($fileBuket[$url] >= 1) {
					continue;
				}
				$result[] = array("key" => $value, "url" => $url, "name" => $tree[$url]);
				$fileBuket[$url]++;
				$i++;

			}
		}
		if ($result) {
			return echoJson(array('code' => 100, 'message' => 'success', 'content' => $result), $callback);
		} else {
			return echoJson(array('code' => -2, 'message' => 'no content', 'content' => null), $callback);
		}
	}

}

/**
 * Encodes an arbitrary variable into JSON format
 *
 * @param mixed $var any number, boolean, string, array, or object to be encoded.
 * If var is a string, it will be converted to UTF-8 format first before being encoded.
 * @return string JSON string representation of input var
 */
function echoJson($data, $callback = "") {
	header("Content-type: application/json; charset=utf-8");
	if (empty($callback)) {
		echo json_encode($data);
	} else {
		echo $callback . '(' . json_encode($data) . ')';
	}
}
/**
 * [getTree 根据菜单文件，获得文件名和url列表]
 * @return [type] [array]
 */
function getTree() {
	$lines = file("all.md");
	$result = array();
	foreach ($lines as $value) {
		preg_match('/(\[.*\])(\(.*\))/', $value, $matches);
		if (isset($matches[2]) && isset($matches[1]) && !empty($matches[1])) {
			list($key, $name) = str_replace(array('[', ']', '(', ')'), "", array($matches[2], $matches[1]));
			$result[$key] = $name;
		}
	}
	return $result;

}