<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">

                </ol>
            </div>
            <h4 class="page-title">Create Attribute</h4>
        </div>
        <div class="card mb-md-0 mb-3">
            <div class="card-body ">
                @include('admin.widgets.FlashMessage')
                <form class="row g-3" method="POST" action="{{route('InAdmin.Product.Attribute.CreateProcess')}}">
                    @csrf
                    <div class="col-12">
                        <label class="form-label">Attribute Title</label>
                        <input type="text" name="title" class="form-control" id="inputNanme4">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description"> </textarea>
                    </div>
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr class="variant_row_lists">
                                    <td class="pl-0 pb-0 border-0">
                                        <input class="form-control" id="variant_values" name="variant_values[]" placeholder="-" type="text">
                                    </td>
                                    <td class="pl-0 pb-0 pr-0 border-0">
                                        <div class="add_items_button pt-10">
                                            <button type="button" class="btn btn-success add_single_variant_row">
                                                <i class="bi bi-plus"></i> Add Value
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form><!-- Vertical Form -->


            </div>
    </div>

</div>
@section('scripts')
    <script type="text/javascript">
        $(document).on('click','.add_single_variant_row',function () {
            $('.variant_row_lists:last').after(`<tr class="variant_row_lists">
                            <td class="pl-0 pb-0 border-0">
                                    <input class="form-control" placeholder="-" name="variant_values[]" type="text">
                            </td>
                            <td class="pl-0 pb-0 pr-0 remove border-0">
                                <div class="items_min_icon "><i class="mdi mdi-trash-can"></i></div>
                        </td></tr>`);
        });

        $(document).on('click', '.remove', function () {
            $(this).parents('.variant_row_lists').remove();
        });

    </script>
@endsection
