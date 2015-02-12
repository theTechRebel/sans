<p><h3 align="center">Select a size in one category, the others will change to match your choice.</h3></p>
<form name="hats">
      <center><table border="1" cellspacing="0" cellpadding="3">
	    <tbody><tr>
			<td colspan="4"><span class="red"><font size="2">Hats</font></span></td>
		</tr>
        <tr>
          <td align="center"><font size="2">U.S.</font></td>
          <td align="center"><font size="2">Continental, Europe</font></td>
        </tr>
        <tr>
          <td align="center"><select name="USA" id="us" size="1" onchange="changeSizes(this.selectedIndex,this.form);">
            <option>6</option>
            <option>6¾</option>
            <option>7</option>
            <option>7¼</option>
            <option>7½</option>
            <option>7¾</option>
          </select></td>
          <td align="center"><select name="EUR" id="europe" size="1" onchange="changeSizes(this.selectedIndex,this.form);">
            <option>54</option>
            <option>55</option>
            <option>56</option>
            <option>58</option>
            <option>60</option>
            <option>62</option>
          </select></td>
        </tr>
      </tbody></table>
      </center>
    </form>