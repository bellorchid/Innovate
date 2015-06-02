@extends('admin')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="profiles">
                <div class="profile-personal">
                    <a href="{{ url('image/edit/'.$student->id)}}"><img src="{{$student->icon}}" alt="加载失败" class="ico-personal"></a>
                    <h2 class="name-detail">{{ $student->name }} <small>{{ $student->description}}</small></h2>
                    <p class="tag-detail">{{$student->tags}}</p>

                    <div class="personal-detail">
                        <div class="form-group">
                            <label for="id">学 号：{{ $student->id }}</label>
                        </div>

                        <div class="form-group">
                            <label for="id">姓 名：</h3>{{ $student->name }}</h3></label>
                        </div>

                        <div class="form-group">
                            <label for="id">手机号：{{ $student->tel }}</label>
                        </div>

                        <div class="form-group">
                            <label for="id">邮 件：{{ $student->email }}</label>
                        </div>

                        <div class="form-group">
                            <label for="id">github：<a href="{{ $student->github }}">{{ $student->github }}</a></label>
                        </div>

                        <div class="form-group">
                            <label for="id">详细信息： {{ $student->resume}}</label>
                        </div>

                    </div>
                    <div class="personal-button">
                        <a href="{{url('student/edit')}}"><button type="button" class="btn btn-primary">点击修改资料</button></a>
                    </div>

                </div>

                <div class="personal-project">
                    <div class="project-box">            
                        <h2>参与的项目&nbsp <small><a href="{{ url('project/add')}}"><span class="glyphicon glyphicon-plus" aria-hidden="true">新增项目</span></a></small></h2>
                        <ul>
                            @foreach($project as $projects)
                            <li><a href="{{ url('/project/'.$projects->id)}}">{{$projects->name}}</a></li>
                            @endforeach
                        </ul>

                    </div>
                    <div class="project-box">            
                        <h2>发表的博文</h2>
                        <ul>
                            @foreach($blog as $blogs)
                            <li><a href="{{ $blogs->address}}" target="_blank">{{$blogs->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Todo -->
<!--                     <div class="project-box">            
                        <h2>计划的任务</h2>
                        <section id="todoapp">
                                <input
                                    id="new-todo"
                                    autofocus
                                    autocomplete="off"
                                    placeholder="What needs to be done?"
                                    v-model="newTodo"
                                    v-on="keyup:addTodo | key enter"
                                >
                            <section id="main" v-show="todos.length" v-cloak>
                                <input
                                    id="toggle-all"
                                    type="checkbox"
                                    v-model="allDone"
                                >
                                <ul id="todo-list">
                                    <li
                                        class="todos"
                                        v-repeat="todos | filterTodos"
                                        v-class="
                                            completed : completed,
                                            editing   : this == editedTodo
                                        "
                                    >
                                        <div class="view">
                                            <input
                                                class="toggle"
                                                type="checkbox"
                                                v-model="completed"
                                            >
                                            <label v-text="title" v-on="dblclick: editTodo(this)"></label>
                                            <button class="destroy" v-on="click: removeTodo(this)"></button>
                                        </div>
                                        <input
                                            class="edit"
                                            type="text"
                                            v-model="title"
                                            v-todo-focus="this == editedTodo"
                                            v-on="
                                                blur  : doneEdit(this),
                                                keyup : doneEdit(this) | key enter,
                                                keyup : cancelEdit(this) | key esc
                                            "
                                        >
                                    </li>
                                </ul>
                            </section>
                            <footer id="footer" v-show="todos.length" v-cloak>
                                <ul id="filters">
                                    <li><a href="#/all" v-class="selected: activeFilter == 'all'">All</a></li>
                                    <li><a href="#/active" v-class="selected: activeFilter == 'active'">Active</a></li>
                                    <li><a href="#/completed" v-class="selected: activeFilter == 'completed'">Completed</a></li>
                                </ul>
                            </footer>
                        </section>
                    </div> -->
                    <!-- Todo -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection