<p><h3 align="center">Select a size in one category, the others will change to match your choice.</h3></p>
<form name="suits">
      <center><table border="1" cellspacing="0" cellpadding="3">
	    <tbody><tr>
			<td colspan="4"><span class="red"><font size="2">Suits, Coats, Sweaters</font></span></td>
		</tr>
        <tr>
          <td align="center"><font size="2">U.S. (American)</font></td>
          <td align="center"><font size="2">U.K. (British)</font></td>
          <td align="center"><font size="2">Continental, Europe</font></td>
          <td align="center"><font size="2">Japan</font></td>
        </tr>
        <tr>
          <td align="center"><select name="USA" id="us" size="1" onchange="changeSizes(this.selectedIndex,this.form);">
            <option>32</option>
            <option>34</option>
            <option>36</option>
            <option>38</option>
            <option>40</option>
            <option>42</option>
            <option>44</option>
            <option>46</option>
            <option>48</option>
          </select></td>
          <td align="center"><select name="UK" id="uk" size="1" onchange="changeSizes(this.selectedIndex,this.form);">
            <option>32</option>
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
            <option>42</option>
            <option>44</option>
            <option>46</option>
            <option>48</option>
            <option>50</option>
            <option>52</option>
            <option>54</option>
            <option>56</option>
            <option>58</option>
          </select></td>
          <td align="center"><select name="Japan" id="japan" size="1" onchange="changeSizes(this.selectedIndex,this.form);">
            <option>--</option>
            <option>S</option>
            <option>--</option>
            <option>M</option>
            <option>L</option>
            <option>--</option>
            <option>LL</option>
            <option>--</option>
            <option>--</option>
          </select></td>
        </tr>
      </tbody></table>
      </center>
    </form>