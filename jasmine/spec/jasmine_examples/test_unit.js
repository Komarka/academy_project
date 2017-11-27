describe('My_test',function(){
	var test = require('../../lib/jasmine_examples/Tet');
	it('should return the propriate summ',function(){
		expect(test.summ(2,3)).toEqual(5)
})
	it('should return the difference',function(){
		expect(test.difference(3,2)).toEqual(1)
})
		it('should return a string',function(){
		expect(test.str('lala')).toEqual(jasmine.any(String));
})
			it('should return a number',function(){
		expect(test.numb(3)).toEqual(jasmine.any(Number));
})
					it('check if array contains a value',function(){
		expect(test.arr(['jack','michael','tom'])).toContain("tom");
})
				it('check if the property is defined',function(){
		expect(test.prop).toBeDefined();
})
			it('check if the string is right',function(){
		expect("foo bar").toMatch(/bar/);

})

})