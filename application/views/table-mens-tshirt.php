<p><h3 align="center">Select a size in one category, the others will change to match your choice.</h3></p>
<form name="tshirts">
      <center><table border="1" cellspacing="0" cellpadding="3">
      <tbody><tr>
      <td colspan="4"><span class="red"><font size="2">T-shirts</font></span></td>
    </tr>
        <tr>
          <td align="center"><font size="2">U.S. Letter</font></td>
          <td align="center"><font size="2">U.S., U.K.</font></td>
          <td align="center"><font size="2">Continental, Europe</font></td>
          <td align="center"><font size="2">Japan</font></td>
        </tr>
        <tr>
          <td align="center"><select name="USA_letter" id="us" size="1" onchange="changeSizes(this.selectedIndex,this.form);">
            <option>Small (S)</option>
            <option>Medium (M)</option>
            <option>Medium (M)</option>
            <option>Large (L)</option>
            <option>Extra Large (XL)</option>
            <option>Extra Large (XL)</option>
            <option>Extra Extra Large (XXL)</option>
            <option>Extra Extra Large (XXL)</option>
          </select></td>
          <td align="center"><select name="USAUK" id="uk" size="1" onchange="changeSizes(this.selectedIndex,this.form);">
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
            <option>87</option>
            <option>91</option>
            <option>97</option>
            <option>102</option>
            <option>107</option>
            <option>112</option>
            <option>117</option>
            <option>122</option>
          </select></td>
          <td align="center"><select name="Japan" id="japan" size="1" onchange="changeSizes(this.selectedIndex,this.form);">
            <option>87</option>
            <option>91</option>
            <option>97</option>
            <option>102</option>
            <option>107</option>
            <option>112</option>
            <option>117</option>
            <option>122</option>
          </select></td>
        </tr>
      </tbody></table>
      </center>
    </form>