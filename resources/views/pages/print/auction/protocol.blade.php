@extends('layouts/print')

@section('pdf')
    <dev style="text-align:right">
        <div><strong>Додаток 2<br>до Регламенту ЕТС</strong></div>
    </dev>
    <br>
    <center>
        <h2>Протокол електронних торгів<br>№{{ $item->auctionID }}</h2>
    </center>
    <br>
    <br>
    <?php
        if(!empty($item->bids)){
            $platform=array_first($item->bids, function($k, $bid) use ($item){
                return $bid->id==$item->__active_award->bid_id;
            });
        }
    ?>
    <div><strong>Назва електронного майданчика:</strong> {{ !empty($platform->owner) ? $platform->owner : 'не вказано'}}<br><em>(через який надано найбільшу цінову пропозицію)</em></div>
    <br>
    <div><strong>Статус торгів:</strong> {{ $item->status=='unsuccessful' ? 'не відбулися' : 'відбулися' }}</div>
    <br>
    <div><strong>Дата та час початку електронних торгів:</strong> {{ !empty($item->auctionPeriod) ? date('d.m.Y H:i', strtotime($item->auctionPeriod->startDate)) : 'не вказано' }}</div>
    <br>
    <div><strong>Дата та час завершення електронних торгів:</strong> {{ !empty($item->auctionPeriod->endDate) ? date('d.m.Y H:i', strtotime($item->auctionPeriod->endDate)) : 'не вказано' }}</div>
    <br>
    <div><strong>Реєстраційний номер лота:</strong> {{ $item->title }}</div>
    <br>
    <div><strong>Найменування майна:</strong> {{ implode(';', array_pluck($item->items, 'description')) }}</div>
    <br>
    <?php
        $place=implode(';', array_pluck($item->__items, 'deliveryAddress'));
    ?>
    <div><strong>Місцезнаходження майна:</strong> {{ !empty($place) ? $place : 'не вказано' }}</div>
    <br>
    <div><strong>Стартова ціна:</strong> {{ str_replace('.00', '', number_format($item->value->amount, 2, '.', ' ')) }} {{ $item->value->currency }}{{ $item->value->valueAddedTaxIncluded ? ', '.trans('tender.vat') : '' }}</div>
    <?php
        if(!empty($item->bids)){
            $tenderers=array_pluck($item->bids, 'tenderers');
            $tenderers=$tenderers ? $tenderers : [];
    
            $tenderers_names=array_pluck(array_collapse($tenderers), 'name');
            $tenderers_names=array_unique($tenderers_names);
        }
    ?>
    <br>
    <div><strong>Допущені до електронних торгів учасники:</strong> {{ !empty($tenderers_names) ? implode(', ', $tenderers_names) : 'не вказано' }}</div>
    <br>
    <div><strong>Цінові пропозиції учасників:</strong></div>
    @if(!empty($item->bids))
        @foreach($item->bids as $bid)
            <div>{{ $bid->tenderers[0]->name }}, {{ date('d.m.Y H:i', strtotime($bid->date)) }}, цінова пропозиція: {{ str_replace('.00', '', number_format($bid->value->amount, 2, '.', ' ')) }} {{ $bid->value->currency }}{{ $bid->value->valueAddedTaxIncluded ? ', '.trans('tender.vat') : '' }}</div>
        @endforeach
    @else
        <div>не вказано</div>
    @endif
    <br>
    <div><strong>Протокол сформовано:</strong> {{ date('d.m.Y H:i') }}</div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div>М.П.</div>
    <div>Оператор: __________</div>
    <br>
    <div>М.П.</div>
    <div>Банк: __________</div>
    <br>
    <div>М.П.</div>
    <div>Переможець: __________</div>
@endsection