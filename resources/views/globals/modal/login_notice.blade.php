<div id="loginNoticeModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content custom-modal">

            <span class="load-overlay"></span>

            <div class="modal-header p-2">
                <h4 class="modal-title text-danger">Download Blocked</h4>
                <a class="btn btn-round btn-white text-danger close fancy-close" data-dismiss="modal">
                    <i class="zmdi zmdi-close"></i>
                </a>
            </div>
            <div class="modal-body{{-- scroll-overlay--}}">
                <h4 class="text-center p-3">
                    To download content, please <a href="{{ route('login') }}" class="text-danger">Login</a> to your account!
                    <br>
                    <br>
                    If you don't have an account, please <a href="{{ route('register') }}" class="text-danger">Register</a>
                </h4>
            </div>
            <div class="modal-footer">
                <br />
                <div class="form-group" align="center">
                    {{--<input type="hidden" name="action" id="action" />
                    <input type="hidden" name="hidden_id" id="hidden_id" />--}}
                    <button type="button" id="closeBtn" class="btn btn-danger float-left pt-2 pb-2 mr-1" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

