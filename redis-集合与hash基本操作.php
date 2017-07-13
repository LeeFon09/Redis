<?php

	//hash操作
	$data['price'] = 12;
	$data['gname'] = 'xxoo';


	$redis = new Redis;

	$redis->connect('127.0.0.1', 6379);

	//hmset key  field  value field1 value2
	// $redis->hmset('cart', $data);
	

	//集合操作
	//往集合中添加一个元素
	// $redis->sadd('cartSet', '1', '2');//sadd key  element ele2

	//删除集合中1元素
	// $redis->srem('cartSet', 1);//srem key ele
	
	//判断元素2是否在集合中
/*	$bool = $redis->sIsMember('cartSet', 1);

	var_dump($bool);*/

	

