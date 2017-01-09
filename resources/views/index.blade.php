@extends('boilerplate')

@section('intro')
<div id="intro">
    <div class="width">
        <div class="intro-content">
            <h2>Laravel 5.3 Notebook App</h2>
            <p>Store and Organise your thoughts in NoteBook App.</p>
            <p>
                <a href="#" class="button button-slider"><i class="fa fa-book"></i> Your Notebooks</a>
                <a href="#" class="button button-reversed button-slider"><i class="fa fa-info"></i> Consectetuer adipiscing</a></p>
        </div>
    </div>
</div>
@endsection


@section('body')
<section id="content" class="two-column with-right-sidebar">
    <article>
        <h2>
            Create Notes to stay organized using <h3>NoteBook App</h3>
        </h2>
        <p>Welcome to Notebook App, a simple free web app for Notes creation.</p>
        <p>
            NoteBook App was created using <a href="https://laravel.com/" title="Laravel Framework">Laravel</a> Framework 5.3 and <a href="http://zypopwebtemplates.com/" title="ZyPOP">Hallux</a> Responsive Template from ZyPOP.
        </p>
        <p>
            Created by Rafael Córdoba (nkrc10), code available on <a href="https://github.com/nkrc10/laravel-notebook">GitHub</a>.
        </p>
    </article>
</section>

<aside class="sidebar big-sidebar right-sidebar">
    <ul>
        <li class="color-bg">
            <h4>Menu</h4>
            <ul class="blocklist">
                <li><a class="selected" href="index.html">Home Page</a></li>
                <li><a href="examples.html">Notes List</a>
        </li>
</aside>
<div class="clear"></div>
@endsection
