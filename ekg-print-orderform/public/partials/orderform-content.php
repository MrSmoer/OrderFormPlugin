<?php
error_log(print_r("form return", TRUE));
?>
<form enctype="multipart/form-data" action="<?php echo add_query_arg( $wp->query_vars, home_url( $wp->request ) ); ?>" method="POST">
    <table>
        <tr>
            <td><label for="objfile">Upload your .stl file here: </label></td>
            <input type="hidden" name="MAX_FILE_SIZE" value="30000"/>
            <td><input type="file"></td>
        </tr>
        <tr>
            <td><label for="printerselect">Select Printer:</label></td>
            <td><select name="printerselect">
                    <option value="anycubic_i3_mega" id="printerselect">Anycubic i3 Mega</option>
                </select></td>
        </tr>
        <tr>
            <td><label for="fil_color">Filament color:</label></td>
            <td>
                <label for="blue">
                    <input type="radio" name="fil_color" id="blue" value="Blue" checked>
                    <span class="dotS" filCo="blue"></span>
                    &nbsp;
                </label>
                <label for="white">
                    <input type="radio" name="fil_color" id="white" value="White">
                    <span class="dotS" filCo="white"></span>
                    &nbsp;
                </label>
                <label for="tpu">
                    <input type="radio" name="fil_color" id="tpu" value="Tpu">
                    <span class="dotS" filCo="tpu"></span>
                    &nbsp;
                </label>
            </td>
        </tr>
        <tr>
            <td><label for="selectConfigMode">Configure mode:</label></td>
            <td><select name="selectConfigMode" id="configMode" onChange="activated(this)" autocomplete="off">
                    <option value="autoconfig" selected>Print with standard configuration</option>
                    <option value="online" disabled>Configure online</option> <!-- TODO -->
                    <option value="upload" disabled>Upload Slic3r config-file</option>
                </select></td>
        </tr>
    </table>
    <div id="configDivs">
        <div id="onlineConfig">
            <li class="laysNPers">
                <ul>
                    <li class="sta"></li>
                    <li class="sta"></li>
                    <li class="sta"></li>
                </ul>
                </tr>
                <tr>
                    <td><label for=""></label></td>
                    <td><input type="" id="" value=""></td>
                </tr>
            </li>
        </div>
        <div id="uploadConfig">
            <br>
            <table>
                <tr>
                    <td><label for="config">Upload your Slic3r print config here:</label></td>
                    <td><input type="file" id="config"></td>
                </tr>
            </table>

        </div>

    </div>

    <input type="submit" value="Anfragen">
</form>