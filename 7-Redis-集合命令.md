## 集合基本命令

集合元素特点： 
将一个或多个 member 元素加入到集合 key 当中，已经存在于集合的 member 元素将被忽略。

	//将一个元素添加到集合中
  sadd 集合名字   元素


	//求集合元素个数
	scard 集合名字

  

	//求查集 (会保留集合名字1中与集合名字2中不同的元素)
	sdiff 集合名字1  集合名字2

	//求集合交集
	sinter 集合1 集合2

	//求集合并集
	SUNION 集合1  集合2

	//判断 member 元素是否集合 key 的成员。
	SISMEMBER key member


	//返回集合 key 中的所有成员
	SMEMBERS key
