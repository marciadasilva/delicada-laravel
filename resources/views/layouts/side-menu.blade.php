<ul class="collection">
    @if(isset($categories))
        @if(count($categories))
            <li class="collection-item"> <a href="/products">  Products  </a></li>
        @else
            <li class="collection-item"> <a style="color: #ccc">  Products  </a></li>
        @endif
    @else
        <li class="collection-item"> <a href="/products">  Products  </a></li>
    @endif
    <li class="collection-item"> <a href="/categories">Categories</a></li>
    <li class="collection-item"> <a href="/users">     Users     </a></li>
    <li class="collection-item"> <a href="/logout">    Logout    </a></li>
</ul>