
@php
    $showcomment = md5(url()->current());
    if (isset(setting()->comment_approved_required) and setting()->comment_approved_required == 1) {
        $comments = $model->approvedComments;
    } else {
        $comments = $model->comments;
    }
@endphp

@if($comments->count() < 1)
    <div class="alert alert-warning">Chưa có bình luận nào </div>
@endif

<ul class="list-unstyled">
    @php
        $comments = $comments->sortBy('created_at');

        if (isset($perPage)) {
            $page = request()->query('page', 1) - 1;

            $parentComments = $comments->where('child_id', '');

            $slicedParentComments = $parentComments->slice($page * $perPage, $perPage);

            $m = Config::get('comments.model'); // This has to be done like this, otherwise it will complain.
            $modelKeyName = (new $m)->getKeyName(); // This defaults to 'id' if not changed.

            $slicedParentCommentsIds = $slicedParentComments->pluck($modelKeyName)->toArray();

            // Remove parent Comments from comments.
            $comments = $comments->where('child_id', '!=', '');

            $grouped_comments = new \Illuminate\Pagination\LengthAwarePaginator(
                $slicedParentComments->merge($comments)->groupBy('child_id'),
                $parentComments->count(),
                $perPage
            );
            $grouped_comments->withPath(\URL::current());
        } else {
            $grouped_comments = $comments->groupBy('child_id');
        }
    @endphp
    @foreach($grouped_comments as $comment_id => $comments)
        {{-- Process parent nodes --}}
        @if($comment_id == '')
            @foreach($comments as $comment)
                @include('comments::_comment', [
                    'comment' => $comment,
                    'grouped_comments' => $grouped_comments
                ])
            @endforeach
        @endif
    @endforeach
</ul>

@isset ($perPage)
    {{ $grouped_comments->links() }}
@endisset
<div id="{{$showcomment}}">
@auth
    @include('comments::_form')
@elseif(Config::get('comments.guest_commenting') == true)
    @include('comments::_form', [
        'guest_commenting' => true
    ])
@else
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Thông báo</h5>
            <p class="card-text text-info">Bạn phải đăng nhập để viết bình luận.</p>
            <button class="btn btn-primary btn-show-login">Đăng nhập</button>
        </div>
    </div>
@endauth
</div>
