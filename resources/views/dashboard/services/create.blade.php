<h1>Add service</h1>

<form action="{{route('dashboard.service.store')}}"
    method="POST"
    enctype="multipart/form-data">
    @csrf

    <input type="text" name="name"
        placeholder="service name"
        required>

    <input type="text" name="price"
        placeholder="Price for service"
        required>

    <input type="file" name="image">

    {{-- service category --}}
    <select name="category" id="serviceCategory">
        <option value="general">Select category</option>

        @forelse ($categories as $category)

        <option value="{{$category->id}}">{{$category->name}}</option>
        @empty
        <option>No categories</option>
        @endforelse
    </select>

    <textarea name="description" id="serviceDescription"
        cols="30"
        rows="10"
        placeholder="service description"></textarea>

    <button>add service</button>

</form>
