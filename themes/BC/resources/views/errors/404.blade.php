@extends('errors.illustrated-layout',['title'=>__('Page not found')])
@section('title',__("Oops! It looks like you're lost."))
@section('message',!empty($exception->getMessage())? $exception->getMessage() :__("The page you're looking for isn't available. Try to search again or use the go to."))
@section('code',404)