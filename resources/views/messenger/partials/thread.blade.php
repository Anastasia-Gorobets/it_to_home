<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>
<?php $own = $thread->isOwn(Auth::id()) ? 'true' : 'false'; ?>
<?php if ($own == 'true'){?>
<div class="media alert {{ $class }}">
    <h4 class="media-heading">
        <a href="{{ route('messages.show', $thread->id) }}">{{ $thread->subject }}</a>
        ({{ $thread->userUnreadMessagesCount(Auth::id()) }} unread)</h4>
    <p>
        {{ $thread->latestMessage->body }}
    </p>
    <p>
        <small><strong>Creator:</strong> {{ $thread->creator()->name }}</small>
    </p>
    <p>
        <small><strong>Participants:</strong> {{ $thread->participantsString(Auth::id()) }}</small>
    </p>
</div>
<?php }?>