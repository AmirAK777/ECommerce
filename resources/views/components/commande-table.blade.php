@props(['orders'])

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    {{ __('messages.user_id') }}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ __('messages.product_name') }}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ __('messages.order_date') }}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ __('messages.price') }}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ __('messages.payment_status') }}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ __('messages.email') }}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ __('messages.phone') }}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ __('messages.city') }}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ __('messages.address') }}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{ __('messages.action') }}
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $commande)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $commande->user_id }}
                </th>
                <td class="px-6 py-4">
                    @foreach ($commande->commande_items()->get() as $item)
                    <ul class="list-unstyled">
                        <li><span>ID :</span> <span class="fw-bold fs-1 text-danger">{{ $item->id }}</span></li>
                        <li><span>Nom :</span> <span class="fw-bold fs-1 text-danger">{{ $item->name }}</span></li>
                    </ul>
                    @endforeach
                </td>
                <td> {{ $commande->status }} </td>
                <td> {{ $commande->grand_total }} dh</td>
                <td> {{ $commande->payment_status}} </td>
                <td> {{ $commande->user_email }} </td>
                <td> {{ $commande->user_phone }} </td>
                <td> {{ $commande->user_city }} </td>
                <td> {{ $commande->user_adresse }} </td>
                <td>
                    <a href="{{ route('orders.edit', $commande) }}" class="btn btn-success mb-1">Modifier</a>
                    <a href="{{route('orders.destroy', $commande)}}" onclick="return confirm('Confirmer la suppression!')" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="11" class="text-center"> {{ __('messages.no_command_found') }}</td>
            </tr>
            @endforelse
        </tbody>

    </table>
    <div>
        {{
                        $orders->links()
                    }}
    </div>
</div>