<?php

use DynamicalWeb\DynamicalWeb;
use DynamicalWeb\HTML;

    function generate_methods_table(array $data)
    {
        HTML::print("<div class=\"table-responsive\">", false);
        HTML::print("<table class=\"table table-hover\">", false);

        $Headers = [
            "Method Name",
            "Access URI",
            "Methods",
            "Description"
        ];

        HTML::print("<thead><tr>", false);
        foreach($Headers as $header)
        {
            HTML::print("<th>", false);
            HTML::print($header, true);
            HTML::print("</th>", false);
        }
        HTML::print("</tr></thead>", false);

        HTML::print("<tbody>", false);
        foreach($data['METHODS'] as $method)
        {
            HTML::print("<tr>", false);

            HTML::print("<th>", false);
            HTML::print("<a href=\"", false);
            HTML::print(DynamicalWeb::getRoute($method['REFERENCE']), true);
            HTML::print("\">", false);
            HTML::print($method['METHOD_NAME'], true);
            HTML::print("</a>", false);
            HTML::print("</th>", false);

            HTML::print("<th>", false);
            HTML::print("<a target=\"_blank\" href=\"", false);
            HTML::print($data['ENDPOINT'] . $method['ACCESS_URI'], true);
            HTML::print("\">", false);
            HTML::print($method['ACCESS_URI'], true);
            HTML::print("</a>", false);
            HTML::print("</th>", false);

            HTML::print("<th>", false);
            foreach($method['REQUEST_METHODS'] as $request_method)
            {
                HTML::print("<code class=\"mr-1\">", false);
                HTML::print($request_method, true);
                HTML::print("</code>", false);
            }
            HTML::print("</th>", false);

            HTML::print("<th>", false);
            HTML::print($method['DESCRIPTION'], true);
            HTML::print("</th>", false);

            HTML::print("</tr>", false);
        }
        HTML::print("</tbody>", false);

        HTML::print("</table>", false);
        HTML::print("</div>", false);
    }