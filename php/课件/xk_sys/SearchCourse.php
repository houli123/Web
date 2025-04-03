<?php
?>
<form action="SearchCourse1.php" method="get">
    <table>
        <tr>
            <td align="center" colspan="6">请输入查询信息</td>
        </tr>
        <tr>
            <td>
                查询
                <select name="ColumnName">
                    <option value="CouNo">课程编号</option>
                    <option value="CouName">课程名称</option>
                    <option value="Kind">类型</option>
                    <option value="Credit">学分</option>
                    <option value="Teacher">教师</option>
                    <option value="DepartNo">开课系部</option>
                    <option value="SchoolTime">上课时间</option>
                </select>
                为
                <input type="text" name="Keyword" size="20">的课程
            </td>
        </tr>
    </table>
    <input type="submit" value="确定">
    <input type="reset" value="重置">
</form>
<?php
