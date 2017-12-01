{{csrf_field()}}
<div class="form-group">
    <br>
    <label for="name">Nome</label>
    <input type="text" class="form-control" name="name" id="name"
           value="{{isset($product->name)? $product->name : ''}}" required >
</div>

<div class="form-group">
    <label for="name">Descrição</label>
    <input type="text" class="form-control" name="description" id="description"
           value="{{isset($product->description)? $product->description : ''}}" required>
</div>

<div class="form-group">
    <label for="name">Tamanho</label>
    <input type="text" class="form-control" name="size" id="size"
           value="{{isset($product->size)? $product->size : ''}}" required>
</div>

<div class="form-group">
    <label for="name">Cores Disponíveis</label>
    <input type="text" class="form-control" name="color" id="color"
           value="{{isset($product->color)? $product->color : ''}}" required>
</div>

<div class="form-group">
    <label for="name">Preço</label>
    <input type="text" class="form-control" name="price" id="price"
           value="{{isset($product->price)? $product->price : ''}}" required>
</div>

<div class="form-group">
    <label for="name">Quantidade</label>
    <input type="text" class="form-control" name="amount" id="amount"
           value="{{isset($product->amount)? $product->amount : ''}}" required>
</div>

<div class="form-group">
    <label>Categoria</label>
    <select name="id_category" id="id_category" class="browser-default" required>
        @if(isset($product->id_category))
            @foreach($categories as $category)
                @if($product->id_category == $category->id)
                    <option name="id_category" value="{{$category->id}} " selected>
                        {{$category->name}}
                    </option>
                @else
                <option name="id_category" value="{{$category->id}}">
                    {{$category->name}}
                </option>
                @endif
            @endforeach
        @else
            <option value="" disabled selected>Escolher</option>
            @foreach($categories as $category)
                <option name="id_category" value="{{$category->id}}">
                    {{$category->name}}
                </option>
            @endforeach
        @endif
    </select>
</div>

@if(isset($product->image))
    <div class="input-field">
        <img width="150" src="{{asset($product->image)}}">
    </div>

    <div class="input-field">
        <br>
        <br>
        <label for="name">Mudar imagem</label>
        <input type="file" class="form-control" name="image" id="image">
    </div>
@else
    <div class="form-group">
        <br>
        <label for="name">Imagem</label>
        <input type="file" class="form-control" name="image" id="image" required>
    </div>
@endif