<form method="POST" action="{{ route('requirements.update', $requirements->id) }}" class="needs-validation" novalidate>
@csrf
@method('PUT')
    @csrf
        <div class="form-group">
            <label >Name</label>
            <input type="text" name="name" class="form-control" value="{{ $requirements->name }}" placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label >Description</label>
            <textarea class="form-control" name="description"  placeholder="Enter Description" rows="3">{{ $requirements->description }}</textarea>
        </div>
        <button type="submit" class="btn  btn-primary">Save</button>
    </form>