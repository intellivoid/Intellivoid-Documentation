<?php

    use DynamicalWeb\DynamicalWeb;
    use DynamicalWeb\HTML;

    function f_decode(string $path)
    {
        $file_contents = file_get_contents($path);
        return json_decode($file_contents, true);
    }

    function generate_methods_table(array $data)
    {
        HTML::print("<div class=\"table-responsive\">", false);
        HTML::print("<table class=\"table table-hover table-bordered\">", false);

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

            HTML::print("<td>", false);
            HTML::print("<a href=\"", false);
            HTML::print(DynamicalWeb::getRoute($method['REFERENCE']), true);
            HTML::print("\">", false);
            HTML::print($method['METHOD_NAME'], true);
            HTML::print("</a>", false);
            HTML::print("</td>", false);

            HTML::print("<td>", false);
            HTML::print("<a target=\"_blank\" href=\"", false);
            HTML::print($data['ENDPOINT'] . $method['ACCESS_URI'], true);
            HTML::print("\">", false);
            HTML::print($method['ACCESS_URI'], true);
            HTML::print("</a>", false);
            HTML::print("</td>", false);

            HTML::print("<td>", false);
            foreach($method['REQUEST_METHODS'] as $request_method)
            {
                HTML::print("<code class=\"mr-1\">", false);
                HTML::print($request_method, true);
                HTML::print("</code>", false);
            }
            HTML::print("</td>", false);

            HTML::print("<td>", false);
            HTML::print($method['DESCRIPTION'], true);
            HTML::print("</td>", false);

            HTML::print("</tr>", false);
        }
        HTML::print("</tbody>", false);

        HTML::print("</table>", false);
        HTML::print("</div>", false);
    }

    function generate_parameters_table(array $data)
    {
        HTML::print("<div class=\"table-responsive\">", false);
        HTML::print("<table class=\"table table-hover table-bordered\">", false);

        $Headers = [
            "Parameter Name",
            "Default Value",
            "Required",
            "Description"
        ];

        HTML::print("<thead><tr>", false);
        foreach($Headers as $header)
        {
            HTML::print("<td>", false);
            HTML::print($header, true);
            HTML::print("</td>", false);
        }
        HTML::print("</tr></thead>", false);

        HTML::print("<tbody>", false);
        foreach($data['PARAMETERS'] as $parameter)
        {
            HTML::print("<tr>", false);

            HTML::print("<td>", false);
            HTML::print($parameter['PARAMETER_NAME'], true);
            HTML::print("</td>", false);

            HTML::print("<td>", false);
            if(is_null($parameter['DEFAULT_VALUE']))
            {
                HTML::print("<code>", false);
                HTML::print("NULL", true);
                HTML::print("</code>", false);
            }
            else
            {
                HTML::print($parameter['DEFAULT_VALUE'], true);
            }
            HTML::print("</td>", false);

            HTML::print("<td>", false);
            if($parameter['REQUIRED'])
            {
                HTML::print("True");
            }
            else
            {
                HTML::print("False");
            }
            HTML::print("</td>", false);

            HTML::print("<td>", false);
            HTML::print($parameter['DESCRIPTION'], true);
            HTML::print("</td>", false);

            HTML::print("</tr>", false);
        }
        HTML::print("</tbody>", false);

        HTML::print("</table>", false);
        HTML::print("</div>", false);
    }

    function generate_object_structure(array $data)
    {
        HTML::print("<div class=\"table-responsive\">", false);
        HTML::print("<table class=\"table table-hover table-bordered\">", false);

        $Headers = [
            "Name",
            "Type",
            "Description"
        ];

        HTML::print("<thead><tr>", false);
        foreach($Headers as $header)
        {
            HTML::print("<td>", false);
            HTML::print($header, true);
            HTML::print("</td>", false);
        }
        HTML::print("</tr></thead>", false);

        HTML::print("<tbody>", false);
        foreach($data['VARIABLES'] as $variable)
        {
            HTML::print("<tr>", false);

            HTML::print("<td>", false);
            HTML::print($variable['NAME'], true);
            HTML::print("</td>", false);

            HTML::print("<td>", false);
            HTML::print("<code>", false);
            HTML::print($variable['TYPE'], true);
            HTML::print("</code>", false);
            HTML::print("</td>", false);

            HTML::print("<td>", false);
            HTML::print($variable['DESCRIPTION'], true);
            HTML::print("</td>", false);

            HTML::print("</tr>", false);
        }
        HTML::print("</tbody>", false);

        HTML::print("</table>", false);
        HTML::print("</div>", false);
    }

    function generate_types_structure(array $data)
    {
        HTML::print("<div class=\"table-responsive\">", false);
        HTML::print("<table class=\"table table-hover table-bordered\">", false);

        $Headers = [
            "Name",
            "Description"
        ];

        HTML::print("<thead><tr>", false);
        foreach($Headers as $header)
        {
            HTML::print("<td>", false);
            HTML::print($header, true);
            HTML::print("</td>", false);
        }
        HTML::print("</tr></thead>", false);

        HTML::print("<tbody>", false);
        foreach($data['VARIABLES'] as $variable)
        {
            HTML::print("<tr>", false);

            HTML::print("<td>", false);
            HTML::print($variable['NAME'], true);
            HTML::print("</td>", false);

            HTML::print("<td>", false);
            HTML::print($variable['DESCRIPTION'], true);
            HTML::print("</td>", false);

            HTML::print("</tr>", false);
        }
        HTML::print("</tbody>", false);

        HTML::print("</table>", false);
        HTML::print("</div>", false);
    }

    function generate_error_codes(array $data)
    {
        HTML::print("<div class=\"table-responsive\">", false);
        HTML::print("<table class=\"table table-hover table-bordered\">", false);

        $Headers = [
            "Error Code",
            "Message",
            "Obsolete",
            "Description"
        ];

        HTML::print("<thead><tr>", false);
        foreach($Headers as $header)
        {
            HTML::print("<td>", false);
            HTML::print($header, true);
            HTML::print("</td>", false);
        }
        HTML::print("</tr></thead>", false);

        HTML::print("<tbody>", false);
        foreach($data['VARIABLES'] as $variable)
        {
            HTML::print("<tr>", false);

            HTML::print("<td>", false);
            HTML::print($variable['ERROR_CODE'], true);
            HTML::print("</td>", false);

            HTML::print("<td>", false);
            HTML::print($variable['MESSAGE'], true);
            HTML::print("</td>", false);

            HTML::print("<td>", false);
            HTML::print("<code>", false);
            HTML::print((string)$variable['OBSOLETE'], true);
            HTML::print("</code>", false);
            HTML::print("</td>", false);

            HTML::print("<td>", false);
            HTML::print($variable['DESCRIPTION'], true);
            HTML::print("</td>", false);

            HTML::print("</tr>", false);
        }
        HTML::print("</tbody>", false);

        HTML::print("</table>", false);
        HTML::print("</div>", false);
    }
