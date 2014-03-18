webservicerest
==============

Esse tutorial mostra como consumir dados de webservice rest (formato JSON) com PHP.

O código consome dados de um webservice disponibilizado para exemplo na internet. O intuito de utilizar um webservice público foi para mostrar que o webservice não tem que está fisicamente no mesmo local, parece óbvio, mas existem pessoas que tem esse tipo de dúvida.

Contudo, essa aplicação busca os dados desse webservice e lista os dados na página.

Mas caso queira fazer o consumo em localhost para testar, foi criado uma classe Produto que carrega os mesmos dados e as mesmas imagens, buscando mostrar que o importante é saber em qual formato as informações requisitadas está e o endereço que elas estão disponíveis. 

Para que o consumo seja local, basta comentar a url atual e descomentar a local. No caso dessa classe Produto, o método getDados() possui um array com valores pré-determinados que são passados para o formato JSON, o ideal é que os dados venham de um banco seguindo a estrutura e as regras de sua aplicação. Mas como o objetivo desse tutorial é ensinar como consumir um webservice que tenha o formato JSON, essa parte fica irrelevante.
