<h3 class="mt-3 mb-1">Attachments</h3>
<div class="box">
    @if (!$payload->attachments->count())
        <div class="box__section text-center">No attachments for this transaction</div>
    @endif
    @foreach ($payload->attachments as $attachment)
        <div class="box__section">
            <img src="{{ $attachment->file_path }}" style="max-width: 100%; max-height: 200px; border-radius: 5px; vertical-align: top;" />
        </div>
    @endforeach
</div>
