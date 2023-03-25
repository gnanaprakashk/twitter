@extends('layouts.tweet')

@section('content')
<ul class="tweet-feed">
    <li class="new-tweet">
        <img src="{{url('images/avatars/1.png')}}" alt="" class="profile-picture-small" />
        <div class="tweet-input-wrap">
            <input type="text" placeholder="What's happening?" class="tweet-content"/>
            <img src="{{url('images/attach.png')}}" alt="" class="attach-photo" />
        </div>
    </li>
    <li class="view-new-tweets">
        <p>View 22 new Tweets</p>
    </li>
    @forelse ($tweets as $tweet)
        <li class="tweet">
            <img src="{{url('images/avatars/1.png')}}" alt="" class="tweet-profile-thumbnail" />
            <div class="tweet-content-wrap">
                <div class="tweet-header">
                    <a href="{{ route('user.show',$tweet->user->id )}}" class="tweet-display-name">{{ $tweet->user->name }}</a>
                    <a href="{{ route('user.show',$tweet->user->id )}}" class="tweet-username">{{ '@'.strtolower($tweet->user->name) }}</a>
                    <a href="#" class="tweet-time">{{ now()->diffInMinutes($tweet->created_at).'m' }}</a>
                </div>
                <p class="tweet-text">
                    {{ $tweet->description }}
                </p>
                <ul class="tweet-action-buttons">
                    <li><img src="{{url('images/reply.gif')}}" alt="" /></li>
                    <li><img src="{{url('images/retweet.gif')}}" alt="" /></li>
                    <li><img src="{{url('images/star.gif')}}" alt="" /></li>
                    <li><img src="{{url('images/more.gif')}}" alt="" /></li>
                </ul>
            </div>
            <div class="clear"></div>
        </li>
    @empty
        <li>No feeds to show</li>
    @endforelse
</ul>
@endsection
