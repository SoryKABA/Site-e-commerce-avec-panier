<x-mail::message>
# Une nouvelle commande

Une nouvelle commande a été faite, Veuillez consulter le panier <a href="{{route('order.product', $data['customer_payment'])}}">Cliquez ic</a>

- Prénom : {{ $data['customer_name']}}
- Nom : {{ $data['customer_surname'] }}
- Téléphone : {{ $data['customer_phone'] }}
- Email : {{ $data['customer_email'] }}
- Somme totale : {{ $data['amount'] }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
