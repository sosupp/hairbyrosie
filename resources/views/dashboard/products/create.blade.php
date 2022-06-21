<h1>Add Product</h1>

<form action="{{route('dashboard.product.store')}}"
    method="POST"
    enctype="multipart/form-data">
    @csrf

    <input type="text" name="name"
        placeholder="Product name">

    <input type="text" name="unit_price"
        placeholder="Unit Price">

    <input type="text" name="stock"
        placeholder="Quantity in stock">

    <input type="file" name="image">

    {{-- product category --}}
    <select name="category" id="productCategory">
        <option value="general">Select category</option>

        @forelse ($categories as $category)

        <option value="{{$category->id}}">{{$category->name}}</option>
        @empty
        <option>No categories</option>
        @endforelse
    </select>

    <textarea name="description" id="productDescription"
        cols="30"
        rows="10"
        placeholder="Product description"></textarea>

    <button>add product</button>

</form>
