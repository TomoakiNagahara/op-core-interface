# Unit Interfaces

## Overview

The interfaces in `asset/core/interface/` define the contracts expected from units.

## Role in Unit Replacement

The replacement mechanism is not only name-based.

It is intended to work together with interfaces.

That means:

- a caller can use a stable typed unit accessor
- mapping may redirect the concrete unit name
- the resulting object is still expected to satisfy the corresponding interface

This also defines the intended responsibility boundary.

Unit developers are expected to guarantee behavior at the shared public interface boundary.

They are not expected to guarantee every possible forced internal function usage across arbitrary unit or namespace boundaries.

Units that are not exposed through these typed interface-driven access paths may still be called through:

- `OP()->Unit('UnitName')`

That generic access style remains part of the current system.

## Examples

Examples of unit-related interfaces include:

- `IF_UNIT`
- `IF_APP`
- `IF_CI`
- `IF_CD`
- `IF_LAYOUT`
- `IF_NOTICE`
- `IF_ROUTER`
- `IF_WEBPACK`

## Meaning of `IF_UNIT`

`IF_UNIT` is the common base marker for unit-style objects.

More specific unit interfaces extend or specialize the expected behavior for particular units.
