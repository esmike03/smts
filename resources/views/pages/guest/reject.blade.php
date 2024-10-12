<form  action="{{ route('guest.update', $student->id) }}" method="POST">
@csrf
@method('PUT')

    <input type="hidden" name="user_id" value="{{ $student->id }}">
    <div class="form-group">
        <label >Notes</label>
        <textarea class="form-control" name="description"  placeholder="Enter Note's or remarks" rows="3"></textarea>
    </div>
    <button type="submit" class="btn  btn-danger">Reject</button>

</form>