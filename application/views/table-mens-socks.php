<p><h3 align="center">Select a size in one category, the others will change to match your choice.</h3></p>
<form name="socks">
      <center><table border="1" cellspacing="0" cellpadding="3">
	    <tbody><tr>
			<td colspan="4"><span class="red"><font size="2">Socks</font></span></td>
		</tr>
        <tr>
          <td align="center"><font size="2">U.S.</font></td>
          <td align="center"><font size="2">U.K.</font></td>
          <td align="center"><font size="2">Continental, Europe</font></td>
        </tr>
        <tr>
          <td align="center"><select name="USA" id="us" size="1" onchange="changeSizes(this.selectedIndex,this.form);">
            <option>9½</option>
            <option>10</option>
            <option>10½</option>
            <option>11</option>
            <option>11½</option>
            <option>12</option>
            <option>12½</option>
          </select></td>
          <td align="center"><select name="UK" id="uk" size="1" onchange="changeSizes(this.selectedIndex,this.form);">
            <option>9½</option>
            <option>10</option>
            <option>10½</option>
            <option>11</option>
            <option>11½</option>
            <option>12</option>
            <option>12½</option>
          </select></td>
          <td align="center"><select name="EUR" id="europe" size="1" onchange="changeSizes(this.selectedIndex,this.form);">
            <option>39</option>
            <option>40</option>
            <option>41</option>
            <option>42</option>
            <option>43</option>
            <option>44</option>
            <option>45</option>
          </select></td>
        </tr>
      </tbody></table>
      </center>
    </form>