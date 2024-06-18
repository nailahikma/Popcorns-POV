<!-- Modal -->
<div class="modal fade" id="info{{ $row->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content d-inline-flex">
            <div class="modal-body px-5">
                <div class="text-center mb-4">
                    <h3>Film's Info</h3>
                </div>
                <div class="row text-center">
                    <div class="col" id="player">
                        <iframe src="https://www.youtube.com/embed/{{$row->trailer}}" frameborder="0" height="315" width="560"></iframe>
                    </div>
                </div>
                <br>
                <div class="info">
                    <div class="col blockquote text-center">
                        <h5>Desc</h5>
                        <div class="col-md-6">
                            {{ $row->desc }}
                        </div>
                    </div>
                    <hr>
                    <div class="row g-5">
                        <div class="col-6 mb-0  text-end">
                            <h5>Year</h5>
                            <p>{{ $row->year }}</p>
                        </div>
                        <div class="col-6 mb-0">
                            <h5>Duration</h5>
                            <p>{{ $row->duration }}</p>
                        </div>
                    </div>

                    <div class="row g-5">
                        <div class="col-6 mb-0  text-end">
                            <h5>Rating</h5>
                            <p>{{ $row->rating }}</p>
                        </div>
                        <div class="col-6 mb-0">
                            <h5>Genre</h5>
                            <p>{{ $row->genre1->genre }}</p>
                        </div>
                    </div>

                    <div class="row g-5">
                        <div class="col-6 mb-0  text-end">
                            <h5>Producer</h5>
                            <p>{{ $row->producer }}</p>
                        </div>
                        <div class="col-6 mb-0">
                            <h5>Director</h5>
                            <p>{{ $row->director }}</p>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://www.youtube.com/iframe_api"></script>
<script>
    var player;

    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: '300',
            width: '400',
            videoId: '{{$row->trailer}}',
            events: {
                'onStateChange': onPlayerStateChange,
                'onReady': onPlayerReady
            }
        });
    }
</script>