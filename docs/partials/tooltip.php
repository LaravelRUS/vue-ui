<h2>
    <a href="#tooltip" name="tooltip" class="anchor"></a>
    Tooltip
</h2>

<h3>Свойства</h3>

<table>
    <thead>
        <tr>
            <td>Название</td>
            <td>Тип</td>
            <td>Значение по умолчанию</td>
            <td>Описание</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="4">
                <span style="color: #ff4a22; font-weight: bold">
                    Родитель должен содержать <code>position: relative</code>,
                    <code>position: absolute</code> или <code>position: fixed</code>
                </span>
            </td>
        </tr>
        <tr>
            <td><code>direction</code></td>
            <td>
                Одно из:
                <ul>
                    <li><code>"bottom"</code></li>
                    <li><code>"left"</code></li>
                    <li><code>"top"</code></li>
                    <li><code>"right"</code></li>
                </ul>
            </td>
            <td><code>"bottom"</code></td>
            <td>Направление тултипа</td>
        </tr>
    </tbody>
</table>

<h3>Примеры</h3>

<table class="examples">
    <thead>
        <tr>
            <td>Тип</td>
            <td>Пример</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <code>&lt;ui-tooltip direction="bottom"&gt;</code>
            </td>
            <td>
                <a href="#" class="dashed" style="position: relative">
                    <ui-tooltip direction="bottom">Tooltip</ui-tooltip>
                    При наведении появится тултип снизу
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <code>&lt;ui-tooltip direction="top"&gt;</code>
            </td>
            <td>
                <a href="#" class="dashed" style="position: relative">
                    <ui-tooltip direction="top">Tooltip</ui-tooltip>
                    При наведении появится тултип сверху
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <code>&lt;ui-tooltip direction="left"&gt;</code>
            </td>
            <td>
                <a href="#" class="dashed" style="position: relative">
                    <ui-tooltip direction="left">Tooltip</ui-tooltip>
                    При наведении появится тултип слева
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <code>&lt;ui-tooltip direction="right"&gt;</code>
            </td>
            <td>
                <a href="#" class="dashed" style="position: relative">
                    <ui-tooltip direction="right">Tooltip</ui-tooltip>
                    При наведении появится тултип справа
                </a>
            </td>
        </tr>
    </tbody>
</table>
