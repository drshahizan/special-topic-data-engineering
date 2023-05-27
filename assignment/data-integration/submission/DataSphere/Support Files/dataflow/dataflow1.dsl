source(output(
		ID as string,
		Password as string,
		Name as string,
		State as string,
		Email as string
	),
	allowSchemaDrift: false,
	validateSchema: true,
	ignoreNoFilesFound: false) ~> source1
source(output(
		ID as string,
		Password as string,
		Name as string,
		State as string,
		Email as string
	),
	allowSchemaDrift: false,
	validateSchema: true,
	ignoreNoFilesFound: false) ~> source2
source(output(
		ID as string,
		Password as string,
		Name as string,
		State as string,
		Email as string
	),
	allowSchemaDrift: false,
	validateSchema: true,
	ignoreNoFilesFound: false) ~> source3
source1, source2, source3 union(byName: true)~> union1
union1 sink(allowSchemaDrift: true,
	validateSchema: false,
	skipDuplicateMapInputs: true,
	skipDuplicateMapOutputs: true,
	saveOrder: 1,
	format: 'table') ~> Output