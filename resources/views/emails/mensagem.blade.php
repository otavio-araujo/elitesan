<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ELITESAN - Contato - WebSite</title>

<style type="text/css">
    .ReadMsgBody {width: 100%; background-color: #009170;}
    .ExternalClass {width: 100%; background-color: #009170;}
    body     {width: 100%; background-color: #009170; margin:0; padding:0; -webkit-font-smoothing: antialiased;font-family: Arial, Helvetica, sans-serif}
    table {border-collapse: collapse;}

    @media only screen and (max-width: 640px)  {
                    body[yahoo] .deviceWidth {width:440px!important; padding:0;}
                    body[yahoo] .center {text-align: center!important;}
            }

    @media only screen and (max-width: 479px) {
                    body[yahoo] .deviceWidth {width:280px!important; padding:0;}
                    body[yahoo] .center {text-align: center!important;}
            }
</style>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" yahoo="fix" style="font-family: Arial, Helvetica, sans-serif">

<!-- Wrapper -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
    <tr>
        <td width="100%" valign="top" bgcolor="#a5f0df" style="padding-top:20px; padding-bottom:20px;">

            <!--Start Header-->
            <table width="700" bgcolor="#f7f7f7" border="0" cellpadding="0" cellspacing="0" align="center" class="deviceWidth">
                <tr>
                    <td style="padding: 6px 0px 0px">
                        <table width="680" border="0" cellpadding="0" cellspacing="0" align="center" class="deviceWidth">
                            <tr>
                                <td width="100%" >
                                    <!--Start logo-->
                                    <table  border="0" cellpadding="0" cellspacing="0" align="center" class="deviceWidth">
                                        <tr>
                                            <td class="center" style="padding: 10px 0px 10px 0px">
                                                <a href="#"><img src="{{asset('assets/images/emails/elitesan294x80.png')}}"></a>
                                            </td>
                                        </tr>
                                    </table><!--End logo-->
                                </td>
                            </tr>
                        </table>
                   </td>
                </tr>
            </table>
            <!--End Header-->

            <!-- Start Headliner-->
            <table width="700" border="0" cellpadding="0" cellspacing="0" align="center" class="deviceWidth">
                <tr>
                    <td width="100%" bgcolor="#013b55" >
                        <!-- Top  -->
                        <table width="70%"  border="0" cellpadding="0" cellspacing="0" align="center" >
                            <tr>
                                <td  class="center" style="font-size: 16px; color: #fff; font-weight: bold; text-align: center; font-family: Arial, Helvetica, sans-serif; line-height: 25px; vertical-align: middle; padding: 20px 50px;" >
                                CONTATO RECEBIDO VIA WEBSITE
                                </td>
                            </tr>
                        </table><!--End Top-->
                    </td>
                </tr>
            </table>
            <!-- Start Headliner-->

            <!--Start Dados da Mensagem-->
            <table width="700" border="0" cellpadding="0" cellspacing="0" align="center" class="deviceWidth">
                <tr>
                    <td width="100%" bgcolor="#f7f7f7" >
                        <!-- Top  -->
                        <table width="95%"  border="0" cellpadding="0" cellspacing="0" align="center" >
                            <tr>
                                <td  class="center" style="font-size: 16px; color: #303030; font-weight: bold; text-align: center; font-family: Arial, Helvetica, sans-serif; line-height: 25px; vertical-align: middle; padding: 20px 50px 0px; " >
                                Dados da Mensagem
                                </td>
                            </tr>
                            <tr>
                                <td width="100%" class="center" style="font-size: 12px; color: #013b55; font-weight: bold; text-align: center; font-family: Arial, Helvetica, sans-serif; line-height: 25px; vertical-align: middle; padding: 20px 10px; " >
                                   <table width="100%" border="0" cellpadding="0" cellspacing="0" valign="top" style="text-align: left;">
                                     <tr>
                                       <td style="width: 150px; text-align: right; padding-right: 10px;">Data de envio:</td>
                                       <td style="color: #009170; font-weight: lighter;">{{ $data_envio }} às {{ $hora_envio }}</td>
                                     </tr>
                                     <tr>
                                       <td style="width: 150px; text-align: right; padding-right: 10px;">Unidade Contatada:</td>
                                       <td style="color: #009170; font-weight: lighter;">{{$unidade}}</td>
                                     </tr>
                                     <tr>
                                       <td style="width: 150px; text-align: right; padding-right: 10px;">Nome ou Empresa:</td>
                                       <td style="color: #009170; font-weight: lighter;">{{$nome}}</td>
                                     </tr>
                                     <tr>
                                       <td style="width: 150px; text-align: right; padding-right: 10px;">Contato:</td>
                                       <td style="color: #009170; font-weight: lighter;">{{$contato or 'Não Disponível'}}</td>
                                     </tr>
                                     <tr>
                                       <td style="width: 150px; text-align: right; padding-right: 10px;">Email:</td>
                                       <td style="color: #009170; font-weight: lighter;">{{$email}}</td>
                                     </tr>
                                     <tr>
                                       <td style="width: 150px; text-align: right; padding-right: 10px;">Telefone:</td>
                                       <td style="color: #009170; font-weight: lighter;">{{$telefone}}</td>
                                     </tr>
                                     <tr>
                                       <td style="width: 150px; text-align: right; padding-right: 10px;">Endereço:</td>
                                       <td style="color: #009170; font-weight: lighter;">{{$endereco}}</td>
                                     </tr>
                                     <tr>
                                       <td style="width: 150px; text-align: right; padding-right: 10px;">Número:</td>
                                       <td style="color: #009170; font-weight: lighter;">{{$numero}}</td>
                                     </tr>
                                     <tr>
                                       <td style="width: 150px; text-align: right; padding-right: 10px;">Complemento:</td>
                                       <td style="color: #009170; font-weight: lighter;">{{$complemento or 'Não Disponível'}}</td>
                                     </tr>
                                     <tr>
                                       <td style="width: 150px; text-align: right; padding-right: 10px;">Estado:</td>
                                       <td style="color: #009170; font-weight: lighter;">{{$estado}}</td>
                                     </tr>
                                     <tr>
                                       <td style="width: 150px; text-align: right; padding-right: 10px;">Cidade:</td>
                                       <td style="color: #009170; font-weight: lighter;">{{$cidade}}</td>
                                     </tr>
                                     <tr>
                                       <td valign="top" style="width: 150px; text-align: right; padding-right: 10px;">Mensagem:</td>
                                       <td style="color: #009170; text-align: justify; font-weight: lighter; padding-right:20px;">{{$mensagem}}</td>
                                     </tr>
                                   </table>
                                </td>
                            </tr>
                        </table><!--End Top-->
                    </td>
                </tr>
            </table>
            <!--End Dados da Mensagem -->

            <!-- Footer -->
            <table width="700"  border="0" cellpadding="0" cellspacing="0" align="center" class="deviceWidth"  >
                <tr>
                    <td  bgcolor="#013b55" class="center" style="font-size: 12px; color: #00ffc5; font-weight: bold; text-align: center; font-family: Arial, Helvetica, sans-serif; line-height: 25px; vertical-align: middle; padding: 20px 50px;" >
                        Email enviado por: www.elitesan.com.br
                    </td>

                </tr>
            </table>
            <!--End Footer-->

        </td>
    </tr>
</table>
<!-- End Wrapper -->
</body>
</html>
