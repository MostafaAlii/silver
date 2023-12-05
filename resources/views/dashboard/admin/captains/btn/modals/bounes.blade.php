<!-- Modal -->
<div class="modal fade" id="bounes{{$captain->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$captain->name}} Bouns</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('captains.bouns', $captain->id)}}" method="post">
                    @csrf
                    <div class="table-responsive" bis_skin_checked="1">
                        <table id="datatable" class="table-bordered border table table-striped dataTable p-0 table-hover dark">
                          <thead>
                            <tr>
                              <th scope="col">Bouns</th>
                              <th scope="col">Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php
                                $bouns = \App\Models\CaptionBonus::whereCaptainId($captain->id)->with('captain')->select('id', 'captain_id', 'bout', 'status')->get();
                            @endphp
                            @forelse ($bouns as $boun)
                            <tr>
                                <td>{{$boun?->bout }}</td>
                                <td>
                                    <select class="form-control form-control-md p-1" id="manageOrderStatus" name="status">
                                        <option value="">Status</option>
                                        <option value="active" {{ old('status', $boun?->status) == 'active' ? 'selected' : null }}>Active</option>
                                        <option value="inactive" {{ old('status', $boun?->status) == 'inactive' ? 'selected' : null }}>Inactive</option>
                                        <option value="waiting" {{ old('status', $boun?->status) == 'waiting' ? 'selected' : null }}>Waiting</option>
                                    </select>
                                </td>
                            </tr>  
                            @empty  
                            <tr>
                                <td colspan="6" class="text-center text-danger">
                                    No Bouns For {{ $captain?->name }}
                                </td>
                            </tr>
                            @endforelse
                          </tbody>
                        </table>
                      </div>
                </form>
            </div>

        </div>
    </div>
</div>
