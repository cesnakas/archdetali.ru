<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("��������� ���������� ������ ������� ���������");
$APPLICATION->SetPageProperty("title","��������� ���������� ������ ������� ��������� �������� ��� ���� ���� �� 1 ���������� ���� � ������");
$APPLICATION->SetPageProperty("description","���� �� ������ ������� ���������� ������� ��� �����. ������ �Arch Detali� �������� ����� ������ ����� � ����. ������� ����� ������, ������������ � ������������ ����� ���������. ������� �� ��� ������� � ��������� ����� ��������� �� ���������� ��������.");
?><p>
    ��������� ������ �������������� ����� ������� �������, ������ �������, ���������� ��������� �� ����� � �������� ��������. �� ��������� ���� ������� ������������� � ������� �������� ��� ����, �� � ������������� ����� ����������� ����� � ��������� �����, ��������� ������. �������� ������ �� �����, ����� ������, ������� ����� ������ ���������� ������� � ���������� ����������� ��� ���������� ������������.
</p>
<p>
    �������� ������ ������ � ������������� ��������, ������������� � �������� ���������, ���������� �� ������� � ����������, �������� ����� ��� ����, � ��������� �������� � � ����� ������ ��������� ����� ����� ��������������� ����� ��������������. �� ����������� ����� ������������, ������� ���������� �� ��������������, ��������� ������������ �������������������. ����������� � ��������������� ������, �����������, ��������� ��������� �� ������ � ������, �� �������� ������ � ������������ ������� � ������� �������� �������, ��� ��� ������. ������� ��������� � ���������� ���������� ����� ���������� � ����� �����.
</p>

<div class="paketnii-block-in-price">
    <? $APPLICATION->IncludeComponent(
		"bitrix:main.include", "", 
		array("AREA_FILE_SHOW" => "file", 
		"PATH" => $APPLICATION->GetTemplatePath("include_areas/paketnii_predloshenia.php")), false); 
	?>
</div>
</div></div></div>

<? $APPLICATION->IncludeComponent(
    "bitrix:main.include", "",
    array("AREA_FILE_SHOW" => "file",
        "PATH" => $APPLICATION->GetTemplatePath("include_areas/calc2.php")), false);
?>
    <div class="row">
        <div class="maxwidth-theme">
<div class="content-md">

<br>
<br>
<h3>���� �� ��������� ���� �����</h3>
<table class="table table-striped" id="top">
    <thead>
        <tr>
            <th>
                �
            </th>
            <th>
                <span style="font-weight:bold;">������������</span>
            </th>
            <th>
                <span style="font-weight:bold;">���.���.�</span>
            </th>
            <th>
                <span style="font-weight:bold;">�����(��.)��</span>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="4">
                ��������� ������
            </td>
        </tr>
        <tr>
            <td>
                1
            </td>
            <td>
                <span style="font-weight:bold;">����� ��������� ��� ������������</span>
            </td>
            <td>
                �
            </td>
            <td style="text-align:center">
                ���������
            </td>
        </tr>
        <tr>
            <td>
                2
            </td>
            <td>
                <span style="font-weight:bold;">������� ������������ ���������</span>
            </td>
            <td style="text-align:center">
                �����
            </td>
            <td style="text-align:center">
                �3 000����.��
            </td>
        </tr>
        <tr>
            <td>
                3
            </td>
            <td>
                <span style="font-weight:bold;">���������� ������� ���������</span> <br>
                ������������� �������+������� �������
            </td>
            <td style="text-align:center">
                ��/�
            </td>
            <td style="text-align:center">
                <del><span style="color: #ff0000;">1 600����.<br>
                    </span></del><span style="font-weight:bold;">1 250 ���.</span><del><span style="color: #ff0000;"><br>
                    </span></del>
            </td>
        </tr>
        <tr>
            <td>
                4
            </td>
            <td>
                <span style="font-weight:bold;">�������������</span>
            </td>
            <td style="text-align:center">
                ��/�
            </td>
            <td style="text-align:center">
                1 000����.
            </td>
        </tr>
        <tr>
            <td>
                5
            </td>
            <td>
                <span style="font-weight:bold;">��������� ������</span>
            </td>
            <td style="text-align:center">
                ��/�
            </td>
            <td style="text-align:center">
                1 000����.
            </td>
        </tr>
        <tr>
            <td>
                6
            </td>
            <td>
                <span style="font-weight:bold;">������-������ "��� ����</span> <br>
                ���������� ������-���������, �������������, ��������� ������
            </td>
            <td style="text-align:center">
                ��/�
            </td>
            <td style="text-align:center">
                3 050 ���.
            </td>
        </tr>
        <tr>
            <td>
                7
            </td>
            <td>
                <span style="font-weight:bold;">���������� ������� ��������� (������������� �������)</span>
            </td>
            <td style="text-align:center">
                ��/�
            </td>
            <td style="text-align:center">
                800����.
            </td>
        </tr>
        <tr>
            <td>
                8
            </td>
            <td>
                <span style="font-weight:bold;">���������� ������� ���������</span> (������������)
            </td>
            <td style="text-align:center">
                ��/�
            </td>
            <td style="text-align:center">
                750 ���.
            </td>
        </tr>
        <tr>
            <td>
                9
            </td>
            <td>
                <span style="font-weight:bold;">���������� ������� ���������</span> (������� �������)
            </td>
            <td style="text-align:center">
                ��/�
            </td>
            <td style="text-align:center">
                800����.
            </td>
        </tr>
        <tr>
            <td>
                10
            </td>
            <td>
                <span style="font-weight:bold;">���������� ������� ���������</span> (������� )�
            </td>
            <td style="text-align:center">
                ��������
            </td>
            <td style="text-align:center">
                35 000����.
            </td>
        </tr>
        <tr>
            <td>
                11
            </td>
            <td>
                <span style="font-weight:bold;">���������� ������� ���������</span> (������� )
            </td>
            <td style="text-align:center">
                ��������
            </td>
            <td style="text-align:center">
                30 000����.
            </td>
        </tr>
        <tr>
            <td>
                12
            </td>
            <td>
                <span style="font-weight:bold;">���������� ������� �������������������</span>
            </td>
            <td style="text-align:center">
                ��/�
            </td>
            <td style="text-align:center">
                350����.
            </td>
        </tr>
        <tr>
            <td>
                13
            </td>
            <td>
                <span style="font-weight:bold;">���������� ������� ����������� ����������������</span>
            </td>
            <td style="text-align:center">
                ��/�
            </td>
            <td style="text-align:center">
                350����.
            </td>
        </tr>
        <tr>
            <td>
                14
            </td>
            <td>
                <span style="font-weight:bold;">���������� ������� ������������� � �����������</span>
            </td>
            <td style="text-align:center">
                ��/�
            </td>
            <td style="text-align:center">
                400 ���.
            </td>
        </tr>
        <tr>
            <td>
                15
            </td>
            <td>
                <span style="font-weight:bold;">���������� ������� ���������</span>
            </td>
            <td style="text-align:center">
                ��/�
            </td>
            <td style="text-align:center">
                400 ���.
            </td>
        </tr>
        <tr>
            <td>
                16
            </td>
            <td>
                <span style="font-weight:bold;">���������� ������� ��������,�������� ������������</span>
            </td>
            <td style="text-align:center">
                ��/�
            </td>
            <td style="text-align:center">
                500 ���.
            </td>
        </tr>
        <tr>
            <td>
                17
            </td>
            <td>
                <span style="font-weight:bold;">���������� �������� ����������������� � ����������</span>
            </td>
            <td style="text-align:center">
                ��/�
            </td>
            <td style="text-align:center">
                400 ���.
            </td>
        </tr>
        <tr>
            <td>
                18
            </td>
            <td>
                <span style="font-weight:bold;">������������ ������� �������������������</span>
            </td>
            <td style="text-align:center">
                ��.
            </td>
            <td style="text-align:center">
                17 500����.
            </td>
        </tr>
        <tr>
            <td>
                19
            </td>
            <td>
                <span style="font-weight:bold;">��������� ���������� �� ������������� ��������</span>
            </td>
            <td style="text-align:center">
                ��.
            </td>
            <td style="text-align:center">
                25 000����.
            </td>
        </tr>
        <tr>
            <td>
                20
            </td>
            <td>
                <span style="font-weight:bold;">���������� �������������� ������� �� �������������� ���������</span><br>
                (�� 100 �2)(��������,��������)
            </td>
            <td style="text-align:center">
                ��.
            </td>
            <td style="text-align:center">
                55 000����.
            </td>
        </tr>
        <tr>
            <td>
                21
            </td>
            <td>
                <span style="font-weight:bold;">������������ �������������� ������� �� �������������� ���������</span><br>
                (�� 100 �2) (��������,��������)
            </td>
            <td style="text-align:center">
                ��.
            </td>
            <td style="text-align:center">
                100 000����.
            </td>
        </tr>
        <tr>
            <td>
                22
            </td>
            <td>
                <span style="font-weight:bold;">���������� �������������� ������� �� �������������� ���������</span><br>
                (����� 100 �2) (��������,��������)
            </td>
            <td style="text-align:center">
                ��.
            </td>
            <td style="text-align:center">
                80 000����.
            </td>
        </tr>
        <tr>
            <td>
                23
            </td>
            <td>
                <span style="font-weight:bold;">������������ �������������� ������� �� �������������� ���������</span><br>
                (����� 100 �2) (��������,��������)
            </td>
            <td style="text-align:center">
                ��.
            </td>
            <td style="text-align:center">
                100 000����.
            </td>
        </tr>
        <tr>
            <td>
                24
            </td>
            <td>
                <span style="font-weight:bold;">����������� ������</span>
            </td>
            <td style="text-align:center">
                ��/�
            </td>
            <td style="text-align:center">
                2 000����.
            </td>
        </tr>
        <tr>
            <td>
                25
            </td>
            <td>
                <span style="font-weight:bold;">����� � �������� (�������������) �������� ������</span>
            </td>
            <td style="text-align:center">
                ��������
            </td>
            <td style="text-align:center">
                10% <br>
                �� ��������� <br>
                ������
            </td>
        </tr>
        <tr>
            <td>
                26
            </td>
            <td>
                <span style="font-weight:bold;">����������� �����</span>
            </td>
            <td style="text-align:center">
                ����� �����
            </td>
            <td style="text-align:center">
                15 000����.
            </td>
        </tr>
        <tr>
            <td>
                27
            </td>
            <td>
                <span style="font-weight:bold;">����������� ��������� ���������� ����������</span>
            </td>
            <td style="text-align:center">
                ��/�
            </td>
            <td style="text-align:center">
                500
            </td>
        </tr>
        <tr>
            <td>
                28
            </td>
            <td>
                <span style="font-weight:bold;">������ ������ � �����������
                </span>
            </td>
            <td style="text-align:center">
                ��/�
            </td>
            <td style="text-align:center">
                500
            </td>
        </tr>
    </tbody>
</table>
<p style="font-size: 20px; line-height: 18px; font-weight: bold;">
    �������� �����
</p>
<p>
    <a href="/price-dizayn-interera/skolko-stoit-dizayn-proekt-doma/">������� ����� ������ ������ ����</a><br>
    <a href="/services/dekorator-interera/">������ ���������� ���������</a><br>
    <a href="/services/dizayn-proekt-doma/">������ ������ ����</a><br>
    <a href="/services/dizayn-proekt-pod-klyuch/">������ ������ ��� ����</a>
</p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>