<ul class="collection">
    @if(isset($categories))
        @if(count($categories))
            <a href="/products"> <li class="collection-item">  Products  </li></a>
        @else
            <a style="color: #ccc"> <li class="collection-item">   Products  </li></a>
        @endif
    @else
        <a href="/products"> <li class="collection-item"> Products  </li></a>
    @endif
        <a href="/categories"><li class="collection-item"> Categories</li></a>
        <a href="/users">     <li class="collection-item"> Users     </li></a>
        <a href="/logout"><li class="collection-item">     Logout    </li></a>
</ul>