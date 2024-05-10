<tr>
    <td class="p-3 text-center">{{ $local->id }}</td>
    <td class="p-3">
        <a href="#" class="text-dark">
            <span class="ms-2">{{ $local->name }}</span>
        </a>
    </td>
    <td>@include('components.is-active', ['status' => $local->web_is_active])</td>
    <td class="text-end p-3">
        @include('components.edit', ['route' => route('landing.l-locals.edit', $local)])
    </td>
</tr>
