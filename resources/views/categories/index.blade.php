
@extends('layouts.index') 
<div id="app">
    <header-user></header-user>
    <show-categories :model="{{$user}}"></show-categories>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-4" v-for="tab in tabs"
            v-bind:key="tab"
            v-bind:class="['tab-button', { active: currentTab === tab }]"
            v-on:click="currentTab = tab">
                <i style="font-size:1.5em" class="text-primary fas fa-plus-circle" 
                > <span style="color:black">@{{ tab }}</span></i>
            </div>
        </div>
    </div>
    <component :model="{{$message}}" v-bind:is="currentTabComponent" class="tab mt-5"></component>
</div>
