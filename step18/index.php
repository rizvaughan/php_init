<?php

class Post {

	public $title;
	public $published;
	public $author;

	public function __construct($title,$author,$published){

		$this->title = $title;
		$this->published = $published;
		$this->author = $author;
	}
}

	$posts = [
		new Post('My first post',"RU",true),
		new Post('My second post',"RT",true),
		new Post('My third post',"AA",true),
		new Post('My fourth post',"RU",false)
	];

/*	$unPublishedPosts = array_filter($posts,function ($post){
		return $post->published;
	});

	$unPublishedPosts = array_filter($posts,function ($post){
		return !$post->published;
	});*/

/*	$modified = array_map(function($post){
		//return "ye cheez";
		 $post->published = true;
		 return $post;
	}, $posts);*/
/*	foreach ($posts as $post) {
		$post->published = true;
	}*/

/*	$modified = array_map(function ($post){
		return $post->title;
	}, $posts);*/

	/*$modified = array_column($posts, "published");*/
	//change object to array or array of arrays

/*	foreach ($posts as $index => $post) {
		$posts[$index] = (array) $post;
	}*/
//OR
/*	$posts = array_map(function ($post){
		return (array) $post;
	}, $posts);*/

	$author = array_column($posts, 'author','title');

	echo "<pre>";
	var_dump($author);
	echo "</pre>";
