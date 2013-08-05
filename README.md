ehyphen
=======

Simple Yii Extension to wrapp for the phpHyphenation library

This is a very basic wrapper for the phpHyphenator library (http://phphyphenator.yellowgreen.de/). It is based on the JavaScript Hyphenator by Mathias Nater.

Requirements 
============

Only tested with Yii 1.1.12, but should work with previous versions as well.

You must download the phpHyphenator archive from http://phphyphenator.yellowgreen.de/ and unzip it inside the extension directory.

Usage 
=====

$hyphen = Yii::createComponent('application.extensions.eHyphen.EHyphen');

$article = $hyphen->hyphenation($article);
