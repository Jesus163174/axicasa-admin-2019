import { TestBed } from '@angular/core/testing';

import { LivingPlaceService } from './living-place.service';

describe('LivingPlaceService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: LivingPlaceService = TestBed.get(LivingPlaceService);
    expect(service).toBeTruthy();
  });
});
