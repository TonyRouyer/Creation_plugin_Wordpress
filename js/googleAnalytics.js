//recuperation de la variable id de la db
var id = object_name.id;
//script tarte au citron
tarteaucitron.user.analyticsUa = toString(id);
tarteaucitron.user.analyticsMore = function () { /* add here your optionnal ga.push() */ };
(tarteaucitron.job = tarteaucitron.job || []).push('analytics');


//test id
alert(id)
