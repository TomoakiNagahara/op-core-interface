# Unit Interfaces

## 概要

`asset/core/interface/` にある interface 群は、unit に期待される contract を定義します。

## unit 差し替えとの関係

差し替え機構は、単に名前を置き換えるだけではありません。

interface と組み合わせて使うことが意図されています。

つまり次を意味します。

- 呼び出し側は安定した typed unit accessor を使える
- mapping によって concrete な unit 名は差し替えられる
- それでも最終的な object は対応する interface を満たすことが期待される

これは、責任境界も定義します。

unit 開発者が保証すべきなのは、共有された public interface 境界での挙動です。

任意の unit や namespace 境界をまたいだ強引な内部関数利用まで保証対象とするものではありません。

これらの typed interface-driven access path として露出していない unit であっても、次で呼ぶことはできます。

- `OP()->Unit('UnitName')`

この generic access style も現行 system の一部として残っています。

## 例

unit 関連の interface には次があります。

- `IF_UNIT`
- `IF_APP`
- `IF_CI`
- `IF_CD`
- `IF_LAYOUT`
- `IF_NOTICE`
- `IF_ROUTER`
- `IF_WEBPACK`

## `IF_UNIT` の意味

`IF_UNIT` は、unit-style object に共通する base marker です。

より具体的な unit interface が、各 unit に固有の期待挙動を定義します。
