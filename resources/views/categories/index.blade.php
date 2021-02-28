
@extends('layouts.index') 
<div id="app">
    <header-user></header-user>
    
    <show-categories :model="{{$user}}"></show-categories>
</div>
