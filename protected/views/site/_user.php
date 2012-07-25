<tr class="odd">
  <td>
    <?=$data["id"]?>
  </td>
    <td>
    <input name="<?=$data["id"]?>" type="text" value="<?=$data["nome"]?>" />
  </td>
    <td>
    <?=$data["login"]?>
  </td>
    <td>
    <?=$data["senha"]?>
  </td>
    <td>
      <select>
        <option><?=$data["id_permissao"]?></option>
      </select>
  </td>
</tr>
