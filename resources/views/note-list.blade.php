@extends('boilerplate')

@section('title', 'Notes List')

@section('intro')
<div id="intro">
    <div class="width">
        <div class="intro-content intro-content-short">
            <h2>Your Notes</h2>
        </div>
    </div>
</div>
@endsection

@section('body')
<section id="content" class="one-column">
    <!-- Portfolio isnt part of Hallux theme. -->
    <article>
        <h4>
            Check your Notes List
        </h4>
        <p>
            <a href="#" class="button">New Note +</a>
        </p>
        <style>
            .portfolio{
                display:flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                align-content: center;
                min-height: 15vh
            }
            .portfolio__item{
                display:flex;
                flex-direction: column;
                margin: 0 5px;
                border-radius: 5px;
                background: rgba(220,220,220,.5);
                height: 25vh;
                width: 20vw;
                justify-content: center;
                align-items: center;
            }
        </style>
        <div class="portfolio">
            <div class="portfolio__item">
                <div class="portfolio__item__image">
                    <h3>NAME</h3>
                </div>
                <div class="portfolio__item__label">
                    <h5>LABEL</h5>
                </div>
                <div class="portfolio__item__button">
                    <a href="#" class="button">BUTTON</a>
                </div>
            </div>
        </div>
    </article>
</section>
<div class="clear"></div>
@endsection
