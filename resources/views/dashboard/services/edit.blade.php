<h1>Add service</h1>

<form action="{{route('dashboard.service.update', $service->id)}}"
    method="POST"
    enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <input type="text" name="name"
        placeholder="service name"
        value="{{$service->name}}">

    <input type="text" name="price"
        placeholder="Price for service"
        value="{{$service->price}}">

    <div>
        <img width="100" height="100" src="{{asset($service->image)}}">

        <input type="file" name="image">
    </div>

    {{-- service category --}}
    <select name="category" id="serviceCategory">
        <option value="{{$service->category->id}}">{{$service->category->name}}</option>

        @forelse ($categories as $category)

        <option value="{{$category->id}}">{{$category->name}}</option>
        @empty
        <option>No categories</option>
        @endforelse
    </select>

    <textarea name="description" id="serviceDescription"
        cols="30"
        rows="10"
        placeholder="service description">{{$service->description}}</textarea>

    <button>update details</button>

</form>
