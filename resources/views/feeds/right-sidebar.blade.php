<div class="right-sidebar">
    <div class="who-to-follow top-level-panel">
        <ul class="who-to-follow-header">
            <li>
                <h1>Who to follow</h1>
            </li>
        </ul>

        <ul class="who-to-follow-list">
            @forelse($follwersSuggestions as $list)
            <li class="suggest-{{ $list['id'] }}">
                <img src="{{url('images/avatars/2.png')}}" alt="" class="tweet-profile-thumbnail" />
                <div class="who-to-follow-right-wrap">
                    <p class="who-to-follow-line-wrap">
                        <a href="{{ route('user.show',$list['id'])}}" class="who-to-follow-display-name">{{ $list['name'] }}</a>
                        <a href="{{ route('user.show',$list['id'])}}" class="tweet-username">{{ '@'.strtolower($list['name']) }}</a>
                    </p>
                    <div class="clear"></div>
                    <div class="follow" onclick="followUser({{ $list['id'] }})">
                        <img src="{{url('images/follow.gif')}}" alt="" />
                        <p>Follow</p>
                    </div>
                </div>

                <div class="clear"></div>
            </li>
            @empty
                <li>No users to show</li>
            @endforelse
        </ul>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="footer top-level-panel">
        <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy</a></li>
        </ul>
    </div>
</div>