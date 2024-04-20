@if (! post_password_required())
  <section id="comments" class="comments">
    @if ($responses)
      <h2>
        {!! $title !!}
      </h2>

      <ul class="comment-list">
        {!! $responses !!}
      </ul>

      @if ($paginated)
        <nav aria-label="Comment">
          <ul class="pager">
            @if ($previous)
              <li class="previous">
                {!! $previous !!}
              </li>
            @endif

            @if ($next)
              <li class="next">
                {!! $next !!}
              </li>
            @endif
          </ul>
        </nav>
      @endif
    @endif

    @if ($closed)
      <x-alert type="warning">
        {!! __('Comments are closed.', 'sage') !!}
      </x-alert>
    @endif

    @php(comment_form())
  </section>
@endif
