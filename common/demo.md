** 文档编写说明： **
> 1、因为Markdown语法限制的关系，接口返回数据部分的说明可以用“返回示例”清晰的罗列出来，认真检查每个字段名、对应值的格式和内容
> 2、切记统一使用驼峰命名法，文档尽量风格统一
> 3、相关人员变成文档时，注意在“开发者”一项中更改“://wpa.qq.com/msgrd?v=3&uin=460309735&site=qq&menu=yes)”链接中的uin为你的QQ号码，方便点击快速联系相关开发人员
> 4、文档风格样式由前端负责修改
> 5、后面再增加API测试功能


<br>
---------

# 接口标题1

####更新记录：

>2015年4月7日 14:50:59  : 修正
2015年4月7日 15:27:36  : 反馈提交接口,添加securityKey验证,去除userId参数;
2015年4月7日 15:28:34  : 用户反馈列接口 拼接内容


####开发者：

> [@李小培](http://wpa.qq.com/msgrd?v=3&uin=460309735&site=qq&menu=yes)

####请求地址：

> 测试地址：v2/ProductPackage/GetCommonPackagesByLinkId?
> 正式地址：v2/ProductPackage/GetCommonPackagesByLinkId?

####传递参数：
> 请求类型：GET

| 参数名 |  描述  |  类型  |  是否必传  | 示例 | 附加说明
| :----: | :----:  | :----:  | :----:  | :----: | :----:
| channelLinkId | 链接ID | Number或String | 是 | 123456 | 无
| checkInDate | 入住日期 | String | 是 | 2015-03-31 | 无
| checkOutDate | 退房日期 | String | 否 | 2015-04-01 | 无

####返回数据：
> 数据格式：JSON

| 名称 |  描述  |  类型  |  示例  | 附加说明
| :----: | :----:  | :----:  | :----:  | :----:
| success | 请求成功与否 | Boolean | true、false | 无
| message | 服务器返回信息 | String | "服务器错误！" | 无
| statusCode | HTTP状态吗 | Number | 200、500 | 无
| serviceFacilities | 酒店设施服务 | Array | [{ demo: "demo.jpg" }, { demo2: "demo2.jpg" }] | 无
| serviceFacilities | 酒店设施服务 | Object | { demo: "demo.jpg", demo2: "demo2.jpg" } | 无
| imageUrl | 图片路径 | String | "/images/demo.jpg" | 无

####返回示例：
```javascript
{
	success: true,
	message: null,
	statusCode: 200
	data: [
		{
			priceInfo: null,
			productPackageId: 177708,
			imageUrl: "images/RoomImage/hl_4703_r_changlongjiudian-yequshuangchuang.jpg",
			mainItemId: 0,
			seriesCount: 0,
			packageName: "【清明、劳动节特惠】欢乐奇幻游：野趣双床房+门票2选1",
			miniPrice: 3098,
			retailPrice: 3200,
			outerDescription: "含长隆园区门票2张（动物世界/欢乐世界2选1，请备注选择）",
			packageType: null,
			isCanBook: true,
			isHasInvoice: null,
			itemSetList: null,
			serviceFacilities: [
				{
					name: "有线网络",
					icon: "facilities_icon/internet.png"
				},
				{
					name: "早餐",
					icon: "facilities_icon/breakfast.png"
				}
			]
		}
	]
}

```


<br>          


# 接口标题2

####更新时间：
> 2015-03-31

####开发者：

> [@李小培](http://wpa.qq.com/msgrd?v=3&uin=460309735&site=qq&menu=yes)

####请求地址：

> 测试地址：v2/ProductPackage/GetCommonPackagesByLinkId?
> 正式地址：v2/ProductPackage/GetCommonPackagesByLinkId?

####传递参数：
> 请求类型：GET

| 参数名 |  描述  |  类型  |  是否必传  | 示例 | 附加说明
| :----: | :----:  | :----:  | :----:  | :----: | :----:
| channelLinkId | 链接ID | Number或String | 是 | 123456 | 无
| checkInDate | 入住日期 | String | 是 | 2015-03-31 | 无
| checkOutDate | 退房日期 | String | 否 | 2015-04-01 | 无

####返回数据：
> 数据格式：JSON

| 名称 |  描述  |  类型  |  示例  | 附加说明
| :----: | :----:  | :----:  | :----:  | :----:
| success | 请求成功与否 | Boolean | true、false | 无
| message | 服务器返回信息 | String | "服务器错误！" | 无
| statusCode | HTTP状态吗 | Number | 200、500 | 无
| serviceFacilities | 酒店设施服务 | Array | [{ demo: "demo.jpg" }, { demo2: "demo2.jpg" }] | 无
| serviceFacilities | 酒店设施服务 | Object | { demo: "demo.jpg", demo2: "demo2.jpg" } | 无
| imageUrl | 图片路径 | String | "/images/demo.jpg" | 无

####返回示例：
```javascript
{
	success: true,
	message: null,
	statusCode: 200
	data: [
		{
			priceInfo: null,
			productPackageId: 177708,
			imageUrl: "images/RoomImage/hl_4703_r_changlongjiudian-yequshuangchuang.jpg",
			mainItemId: 0,
			seriesCount: 0,
			packageName: "【清明、劳动节特惠】欢乐奇幻游：野趣双床房+门票2选1",
			miniPrice: 3098,
			retailPrice: 3200,
			outerDescription: "含长隆园区门票2张（动物世界/欢乐世界2选1，请备注选择）",
			packageType: null,
			isCanBook: true,
			isHasInvoice: null,
			itemSetList: null,
			serviceFacilities: [
				{
					name: "有线网络",
					icon: "facilities_icon/internet.png"
				},
				{
					name: "早餐",
					icon: "facilities_icon/breakfast.png"
				}
			]
		}
	]
}

```