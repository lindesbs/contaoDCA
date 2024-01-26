# contaoDCA

Manage DCA via a simple class structure

```
DCA::DCABuilder('tl_member')
    ->addField('twitter', new DCAFieldText(
        label: 'Twitter',
        labelDescription: 'Ehemals Twitter, jetzt X',
        eval: new DCAEval(
            feEditable: true,
            feViewable: true
        )
    )
)
```