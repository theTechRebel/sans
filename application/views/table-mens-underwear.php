<p><h3 align="center">Select a size in one category, the others will change to match your choice.</h3></p>
<form name="underwear">
      <center><table border="1" cellspacing="0" cellpadding="3">
	    <tbody><tr>
			<td colspan="4"><span class="red"><font size="2">Underwear</font></span></td>
		</tr>
        <tr>
          <td align="center"><font size="2">U.S.</font></td>
          <td align="center"><font size="2">Continental, Europe</font></td>
        </tr>
        <tr>
          <td align="center"><select name="USA" id="us" size="1" onchange="changeSizes(this.selectedIndex,this.form);">
            <option>34</option>
            <option>36</option>
            <option>38</option>
            <option>40</option>
            <option>42</option>
            <option>44</option>
            <option>46</option>
            <option>48</option>
          </select></td>
          <td align="center"><select name="EUR" id="europe" size="1" onchange="changeSizes(this.selectedIndex,this.form);">
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
          </select></td>
        </tr>
      </tbody></table>
      </center>
    </form>